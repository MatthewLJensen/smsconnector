<?php
namespace FreePBX\modules\Smsconnector;
use FreePBX\modules\Backup as Base;
class Restore Extends Base\RestoreBase
{
	public function runRestore()
	{
		$configs = $this->getConfigs();
		$this->importKVStore($configs['kvstore']);
		$this->importTables($configs['tables']);
	}

	public function processLegacy($pdo, $data, $tables, $unknownTables)
	{
		$this->restoreLegacyDatabase($pdo);
	}
}