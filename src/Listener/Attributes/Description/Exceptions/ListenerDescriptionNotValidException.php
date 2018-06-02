<?php

namespace Railken\LaraOre\Listener\Attributes\Description\Exceptions;

use Railken\LaraOre\Listener\Exceptions\ListenerAttributeException;

class ListenerDescriptionNotValidException extends ListenerAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'description';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'LISTENER_DESCRIPTION_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}
