<?php

namespace LaravelPsySH\Presenters;

use Illuminate\Database\Eloquent\Model as Model;

use Psy\Presenter\ObjectPresenter;

class EloquentPresenter extends ObjectPresenter {

  public function canPresent($value)
  {
    return $value instanceof Model;
  }

  protected function getProperties($value, \ReflectionClass $class)
  {
    return $value->getAttributes();
  }

}
