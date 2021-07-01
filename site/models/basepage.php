<?php

use Kirby\Cms\Page;

class BasePage extends Page {
  
    function getDescription()
    {
        if ($this->description()->exists() && $this->description()->isNotEmpty()) {
            return $this->description();
        } elseif ($this->text()->exists() && $this->text()->isNotEmpty()) {
            return $this->text()->excerpt(180);
        } else {
            return $this->title();
        }
    }

    function getMetaImage()
    {
        if ($this->hasImages()) {
            return $this->images()->first()->url();
        }
    }
}

