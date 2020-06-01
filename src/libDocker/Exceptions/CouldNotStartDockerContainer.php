<?php

namespace libDocker\Exceptions;

use Exception;
use libDocker\DockerContainer;
use Symfony\Component\Process\Process;

class CouldNotStartDockerContainer extends Exception
{
    public static function processFailed(DockerContainer $container, Process $process)
    {
        return new static("Could not start docker container for image {$container->image}`. Process output: `{$process->getErrorOutput()}`");
    }
}
