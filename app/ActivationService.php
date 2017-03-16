<?php

namespace App;


use Mail;
use Illuminate\Mail\Message;

class ActivationService
{

    // Description:
    // https://blog.damirmiladinov.com/laravel/laravel-5.2-email-verification-with-activation-code.html#.WMaJ7TuGNPY

    protected $activationRepo;

    protected $resendAfter = 24;

    public function __construct(ActivationRepository $activationRepo)
    {
        $this->activationRepo = $activationRepo;
    }

    public function sendActivationMail(User $user){
        if ($user->activated || !$this->shouldSend($user)) {
            return;
        }

        $token = $this->activationRepo->createActivation($user);

        $link = route('user.activate', $token);
        $message = sprintf('Activate account <a href="%s">%s</a>', $link, $link);

        Mail::raw($message, function (Message $m) use ($user) {
            $m->to($user->email)->subject('Activation mail');
        });
    }

    public function activateUser($token){
        $activation = $this->activationRepo->getActivationByToken($token);

        if ($activation === null) {
            return 'Not valid token. Use the latest e-mail you have recieved.';
        }

        $user = User::find($activation->user_id);

        $user->activated = true;

        $user->save();

        $this->activationRepo->deleteActivation($token);

        return $user;
    }

    private function shouldSend($user){
        $activation = $this->activationRepo->getActivation($user);
        return $activation === null || strtotime($activation->created_at) + 60 * 60 * $this->resendAfter < time();
    }

}
