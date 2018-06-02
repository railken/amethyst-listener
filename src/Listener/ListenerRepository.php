<?php

namespace Railken\LaraOre\Listener;

use Railken\Laravel\Manager\ModelRepository;

class ListenerRepository extends ModelRepository
{

    /**
     * Find a listener given a event_class.
     *
     * @param string $event_class
     *
     * @return \Illuminate\Support\Collection
     */
    public function findByEventClass($event_class)
    {
        return $this->newQuery()->where('event_class', $event_class)->get();
    }
}
