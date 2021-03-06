<?php

namespace State;

use Elephpant;
use Input;

class Running implements StateInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(Elephpant $elephpant, $input)
    {
        switch ($input) {
            case Input::SPACE_DOWN:
                $elephpant->setState(new Jumping());
                break;
            case Input::DOWN_DOWN:
                $elephpant->setState(new Crouching());
                break;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'running';
    }
}
