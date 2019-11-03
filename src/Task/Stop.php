<?php

namespace Droath\RoboDockerCompose\Task;

use Droath\RoboDockerCompose\DockerServicesTrait;

class Stop extends Base
{
    use DockerServicesTrait;

    protected $action = 'stop';
}