<?php

declare(strict_types=1);

namespace CdekSDK2\Dto;

use JMS\Serializer\Annotation\Type;

class Relations
{
    /**
     * Тип сущности, связанной с заказом
     *
     * @Type("string")
     * @var string
     */
    public $type;

    /**
     * Идентификатор сущности, связанной с заказом
     *
     * @Type("string")
     * @var string
     */
    public $uuid;

    /**
     * Ссылка на скачивание печатной формы в статусе "Сформирован", только для type = waybill, barcode
     *
     * @Type("string")
     * @var string|null
     */
    public $url;

    /**
     * Номер заказа СДЭК
     * Может возвращаться для return_order, direct_order, reverse_order
     *
     * @Type("string")
     * @var string|null
     */
    public $cdek_number;

    /**
     * Дата доставки, согласованная с получателем
     * Только для типа delivery
     *
     * @Type("string")
     * @var string|null
     */
    public $date;

    /**
     * Время начала ожидания курьера (согласованное с получателем)
     * Только для типа delivery
     *
     * @Type("string")
     * @var string|null
     */
    public $time_from;

    /**
     * Время окончания ожидания курьера (согласованное с получателем)
     * Только для типа delivery
     *
     * @Type("string")
     * @var string|null
     */
    public $time_to;
}
