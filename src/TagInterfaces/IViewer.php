<?php


namespace App\TagInterfaces;

/**
 * Interface IView
 */
interface IViewer
{
    /**
     * Output html tag
     *
     * @return string
     */
    public function getView(): string;
}
