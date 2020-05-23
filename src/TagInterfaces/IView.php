<?php


namespace App\TagInterfaces;

/**
 * Interface IView
 */
interface IView
{
    /**
     * Output html tag
     *
     * @return string
     */
    public function getView(): string;
}
