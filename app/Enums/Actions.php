<?php

namespace App\Constants\Enums;

enum Actions:string
{
    case Edit = 'edit';
    case View = 'view';
    case Delete = 'delete';
}