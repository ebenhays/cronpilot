<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum RunStatus: string implements HasLabel
{
    case RUNNING = 'Running';
    case SUCCESSFUL = 'Successful';
    case FAILED = 'Failed';

    public function getLabel(): ?string
    {
        return $this->value;
    }
}
