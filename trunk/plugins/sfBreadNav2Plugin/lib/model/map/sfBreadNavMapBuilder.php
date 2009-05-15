<?php


/**
 * This class adds structure of 'sf_BreadNav' table to 'propel' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * 05/15/09 15:09:22
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    plugins.sfBreadNav2Plugin.lib.model.map
 */
class sfBreadNavMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'plugins.sfBreadNav2Plugin.lib.model.map.sfBreadNavMapBuilder';

	/**
	 * The database map.
	 */
	private $dbMap;

	/**
	 * Tells us if this DatabaseMapBuilder is built so that we
	 * don't have to re-build it every time.
	 *
	 * @return     boolean true if this DatabaseMapBuilder is built, false otherwise.
	 */
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	/**
	 * Gets the databasemap this map builder built.
	 *
	 * @return     the databasemap
	 */
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	/**
	 * The doBuild() method builds the DatabaseMap
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap(sfBreadNavPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(sfBreadNavPeer::TABLE_NAME);
		$tMap->setPhpName('sfBreadNav');
		$tMap->setClassname('sfBreadNav');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addColumn('PAGE', 'Page', 'VARCHAR', true, 255);

		$tMap->addColumn('TITLE', 'Title', 'VARCHAR', true, 255);

		$tMap->addColumn('MODULE', 'Module', 'VARCHAR', true, 128);

		$tMap->addColumn('ACTION', 'Action', 'VARCHAR', true, 128);

		$tMap->addColumn('CREDENTIAL', 'Credential', 'VARCHAR', false, 128);

		$tMap->addColumn('CATCHALL', 'Catchall', 'BOOLEAN', false, null);

		$tMap->addColumn('TREE_LEFT', 'TreeLeft', 'INTEGER', true, null);

		$tMap->addColumn('TREE_RIGHT', 'TreeRight', 'INTEGER', true, null);

		$tMap->addColumn('TREE_PARENT', 'TreeParent', 'INTEGER', true, null);

		$tMap->addForeignKey('SCOPE', 'Scope', 'INTEGER', 'sf_BreadNav_Application', 'ID', true, null);

	} // doBuild()

} // sfBreadNavMapBuilder
