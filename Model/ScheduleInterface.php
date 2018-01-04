<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 04/01/2018
 * Time: 14:25
 */

namespace EncreInformatique\Component\Resource\Model;

interface ScheduleInterface
{
    /**
     * @param int $minute
     * @return ScheduleTrait
     */
    public function setMinute(int $minute);

    /**
     * @param int $hour
     * @return ScheduleTrait
     */
    public function setHour(int $hour);

    /**
     * @param mixed $month
     * @return ScheduleTrait
     */
    public function setMonth(int $month);

    /**
     * @param int $dayOfWeek
     * @return ScheduleTrait
     */
    public function setDayOfWeek(int $dayOfWeek);

    /**
     * @param int $dayOfMonth
     * @return ScheduleTrait
     */
    public function setDayOfMonth(int $dayOfMonth);

    /**
     * @return string
     */
    public function getSchedule();
}
