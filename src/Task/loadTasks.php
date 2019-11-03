<?php

namespace Droath\RoboDockerCompose\Task;

/**
 * Load docker compose tasks.
 */
trait loadTasks
{
    /**
     * Docker compose up task.
     * @return \Droath\RoboDockerCompose\Task\Up
     */
    protected function taskDockerComposeUp($pathToDockerCompose = null)
    {
        return $this->task(Up::class, $pathToDockerCompose);
    }

    /**
     * Docker compose ps task.
     * @return \Droath\RoboDockerCompose\Task\Ps
     */
    protected function taskDockerComposePs($pathToDockerCompose = null)
    {
        return $this->task(Ps::class, $pathToDockerCompose);
    }

    /**
     * Docker compose logs task.
     * @return \Droath\RoboDockerCompose\Task\Logs
     */
    protected function taskDockerComposeLogs($pathToDockerCompose = null)
    {
        return $this->task(Logs::class, $pathToDockerCompose);
    }

    /**
     * Docker compose down task.
     * @return \Droath\RoboDockerCompose\Task\Down
     */
    protected function taskDockerComposeDown($pathToDockerCompose = null)
    {
        return $this->task(Down::class, $pathToDockerCompose);
    }

    /**
     * Docker compose pause task.
     * @return \Droath\RoboDockerCompose\Task\Pause
     */
    protected function taskDockerComposePause($pathToDockerCompose = null)
    {
        return $this->task(Pause::class, $pathToDockerCompose);
    }

    /**
     * Docker compose pull task.
     * @return \Droath\RoboDockerCompose\Task\Pull
     */
    protected function taskDockerComposePull($pathToDockerCompose = null)
    {
        return $this->task(Pull::class, $pathToDockerCompose);
    }

    /**
     * Docker compose start task.
     * @return \Droath\RoboDockerCompose\Task\Start
     */
    protected function taskDockerComposeStart($pathToDockerCompose = null)
    {
        return $this->task(Start::class, $pathToDockerCompose);
    }

    /**
     * Docker compose restart task.
     * @return \Droath\RoboDockerCompose\Task\Restart
     */
    protected function taskDockerComposeRestart($pathToDockerCompose = null)
    {
        return $this->task(Restart::class, $pathToDockerCompose);
    }

    /**
     * Docker compose execute task.
     * @return \Droath\RoboDockerCompose\Task\Execute
     */
    protected function taskDockerComposeExecute($pathToDockerCompose = null)
    {
        return $this->task(Execute::class, $pathToDockerCompose);
    }

    /**
     * Docker compose run task.
     * @return \Droath\RoboDockerCompose\Task\Run
     */
    protected function taskDockerComposeRun($pathToDockerCompose = null)
    {
        return $this->task(Run::class, $pathToDockerCompose);
    }

    /**
     * Docker compose build task.
     * @return \Droath\RoboDockerCompose\Task\Build
     */
    protected function taskDockerComposeBuild($pathToDockerCompose = null)
    {
        return $this->task(Build::class, $pathToDockerCompose);
    }

    /**
     * Docker compose build task.
     * @return \Droath\RoboDockerCompose\Task\Stop
     */
    protected function taskDockerComposeStop($pathToDockerCompose = null)
    {
        return $this->task(Stop::class, $pathToDockerCompose);
    }
}
