<?php

namespace App\Repo;

use App\Models\User;
use App\Models\Video;

class parametrage
{
    private $user;
    private $video;
    public function __construct(User $user, Video $video)
    {
        $this->user = $user;
        $this->video = $video;
    }

    public function all_user()
    {
        return $this->user->all();
    }
}
