<?php

abstract class AbstractDataHandler {
    abstract protected function serializable($value = TRUE);
    abstract public function append($data);
}