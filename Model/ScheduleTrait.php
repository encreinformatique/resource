<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 04/01/2018
 * Time: 14:19
 */

namespace EncreInformatique\Component\Resource\Model;

use Doctrine\ORM\Mapping as ORM;

trait ScheduleTrait
{
    /**
     * @ORM\Column(name="minute", type="integer", nullable=true)
     */
    protected $minute;

    /**
     * @ORM\Column(name="hour", type="integer", nullable=true)
     */
    protected $hour;

    /**
     * @ORM\Column(name="month", type="integer", nullable=true)
     */
    protected $month;

    /**
     * @ORM\Column(name="day_of_week", type="integer", nullable=true)
     */
    protected $dayOfWeek;

    /**
     * @ORM\Column(name="day_of_month", type="integer", nullable=true)
     */
    protected $dayOfMonth;

    /**
     * @param mixed $minute
     * @return ScheduleTrait
     */
    public function setMinute(int $minute)
    {
        $this->minute = $minute;
        return $this;
    }

    /**
     * @param mixed $hour
     * @return ScheduleTrait
     */
    public function setHour(int $hour)
    {
        $this->hour = $hour;
        return $this;
    }

    /**
     * @param mixed $month
     * @return ScheduleTrait
     */
    public function setMonth(int $month)
    {
        $this->month = $month;
        return $this;
    }

    /**
     * @param mixed $dayOfWeek
     * @return ScheduleTrait
     */
    public function setDayOfWeek(int $dayOfWeek)
    {
        $this->dayOfWeek = $dayOfWeek;
        return $this;
    }

    /**
     * @param mixed $dayOfMonth
     * @return ScheduleTrait
     */
    public function setDayOfMonth(int $dayOfMonth)
    {
        $this->dayOfMonth = $dayOfMonth;
        return $this;
    }

    /**
     * @return string
     */
    public function getSchedule()
    {
        return $this->minute.' '.
            $this->hour.' '.
            $this->dayOfMonth.' '.
            $this->month.' '.
            $this->dayOfWeek;
    }
}
