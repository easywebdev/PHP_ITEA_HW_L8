<?php
/**
 * Created by PhpStorm.
 * User: foxtech
 * Date: 06/08/18
 * Time: 20:41
 */

namespace App\Tasks;

/**
 * Class CalculateAgeTask
 * @package App\Tasks
 */
class CalculateAgeTask extends Tasks
{
    /**
     * @return int
     */
    public function run(): int
    {
        return rand(1, 100);
    }
}
