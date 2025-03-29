<?php

namespace Tests\Tempest\Integration\ORM\Models;

use Tempest\Database\IsDatabaseModel;
use Tempest\Database\Table;

#[Table('custom_attribute_table_name')]
final class AttributeTableNameModel
{
    use IsDatabaseModel;
}
