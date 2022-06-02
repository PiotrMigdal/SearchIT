<?php
namespace Modules\Errors;

class ErrorFactory {
    public function selectType($type)
    {
        switch ($type) {
            case 'enter3characters':
                return new NumberOfCharactersError();
            case 'noServersSelected':
                return new NoServersSelectedError();
            case 'noResults':
                return new NoResultsError();
            default:
                return 'Unable to determine error type. Please contact developer.';
        }
    }
}