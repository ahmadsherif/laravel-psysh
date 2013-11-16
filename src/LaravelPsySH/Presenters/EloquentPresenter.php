<?php

namespace LaravelPsySH\Presenters;

use Illuminate\Database\Eloquent\Model as Model;

use Psy\Presenter\ObjectPresenter;

class EloquentPresenter extends ObjectPresenter {

  public function canPresent($value)
  {
    return $value instanceof Model;
  }

  // Copied directly from PsySH codebase to allow using of our getProperties
  protected function presentValue($value, $depth = null)
  {
    if ($depth === 0)
    {
      return $this->presentRef($value);
    }

    $class = new \ReflectionObject($value);
    $props = $this->getProperties($value, $class); // Was $props = self::getProperties($value, $class);

    return sprintf('%s %s', $this->presentRef($value), $this->formatProperties($props));
  }

  protected function getProperties($value, \ReflectionClass $class)
  {
    return $value->getAttributes();
  }

}
