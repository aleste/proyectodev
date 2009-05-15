<?php

/**
 * Base class that represents a row from the 'sf_BreadNav' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * 05/15/09 15:09:22
 *
 * @package    plugins.sfBreadNav2Plugin.lib.model.om
 */
abstract class BasesfBreadNav extends BaseObject  implements Persistent {


  const PEER = 'sfBreadNavPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        sfBreadNavPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the page field.
	 * @var        string
	 */
	protected $page;

	/**
	 * The value for the title field.
	 * @var        string
	 */
	protected $title;

	/**
	 * The value for the module field.
	 * @var        string
	 */
	protected $module;

	/**
	 * The value for the action field.
	 * @var        string
	 */
	protected $action;

	/**
	 * The value for the credential field.
	 * @var        string
	 */
	protected $credential;

	/**
	 * The value for the catchall field.
	 * @var        boolean
	 */
	protected $catchall;

	/**
	 * The value for the tree_left field.
	 * @var        int
	 */
	protected $tree_left;

	/**
	 * The value for the tree_right field.
	 * @var        int
	 */
	protected $tree_right;

	/**
	 * The value for the tree_parent field.
	 * @var        int
	 */
	protected $tree_parent;

	/**
	 * The value for the scope field.
	 * @var        int
	 */
	protected $scope;

	/**
	 * @var        sfBreadNavApplication
	 */
	protected $asfBreadNavApplication;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * Initializes internal state of BasesfBreadNav object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Applies default values to this object.
	 * This method should be called from the object's constructor (or
	 * equivalent initialization method).
	 * @see        __construct()
	 */
	public function applyDefaultValues()
	{
	}

	/**
	 * Get the [id] column value.
	 * 
	 * @return     int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the [page] column value.
	 * 
	 * @return     string
	 */
	public function getPage()
	{
		return $this->page;
	}

	/**
	 * Get the [title] column value.
	 * 
	 * @return     string
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * Get the [module] column value.
	 * 
	 * @return     string
	 */
	public function getModule()
	{
		return $this->module;
	}

	/**
	 * Get the [action] column value.
	 * 
	 * @return     string
	 */
	public function getAction()
	{
		return $this->action;
	}

	/**
	 * Get the [credential] column value.
	 * 
	 * @return     string
	 */
	public function getCredential()
	{
		return $this->credential;
	}

	/**
	 * Get the [catchall] column value.
	 * 
	 * @return     boolean
	 */
	public function getCatchall()
	{
		return $this->catchall;
	}

	/**
	 * Get the [tree_left] column value.
	 * 
	 * @return     int
	 */
	public function getTreeLeft()
	{
		return $this->tree_left;
	}

	/**
	 * Get the [tree_right] column value.
	 * 
	 * @return     int
	 */
	public function getTreeRight()
	{
		return $this->tree_right;
	}

	/**
	 * Get the [tree_parent] column value.
	 * 
	 * @return     int
	 */
	public function getTreeParent()
	{
		return $this->tree_parent;
	}

	/**
	 * Get the [scope] column value.
	 * 
	 * @return     int
	 */
	public function getScope()
	{
		return $this->scope;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     sfBreadNav The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = sfBreadNavPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [page] column.
	 * 
	 * @param      string $v new value
	 * @return     sfBreadNav The current object (for fluent API support)
	 */
	public function setPage($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->page !== $v) {
			$this->page = $v;
			$this->modifiedColumns[] = sfBreadNavPeer::PAGE;
		}

		return $this;
	} // setPage()

	/**
	 * Set the value of [title] column.
	 * 
	 * @param      string $v new value
	 * @return     sfBreadNav The current object (for fluent API support)
	 */
	public function setTitle($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->title !== $v) {
			$this->title = $v;
			$this->modifiedColumns[] = sfBreadNavPeer::TITLE;
		}

		return $this;
	} // setTitle()

	/**
	 * Set the value of [module] column.
	 * 
	 * @param      string $v new value
	 * @return     sfBreadNav The current object (for fluent API support)
	 */
	public function setModule($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->module !== $v) {
			$this->module = $v;
			$this->modifiedColumns[] = sfBreadNavPeer::MODULE;
		}

		return $this;
	} // setModule()

	/**
	 * Set the value of [action] column.
	 * 
	 * @param      string $v new value
	 * @return     sfBreadNav The current object (for fluent API support)
	 */
	public function setAction($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->action !== $v) {
			$this->action = $v;
			$this->modifiedColumns[] = sfBreadNavPeer::ACTION;
		}

		return $this;
	} // setAction()

	/**
	 * Set the value of [credential] column.
	 * 
	 * @param      string $v new value
	 * @return     sfBreadNav The current object (for fluent API support)
	 */
	public function setCredential($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->credential !== $v) {
			$this->credential = $v;
			$this->modifiedColumns[] = sfBreadNavPeer::CREDENTIAL;
		}

		return $this;
	} // setCredential()

	/**
	 * Set the value of [catchall] column.
	 * 
	 * @param      boolean $v new value
	 * @return     sfBreadNav The current object (for fluent API support)
	 */
	public function setCatchall($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->catchall !== $v) {
			$this->catchall = $v;
			$this->modifiedColumns[] = sfBreadNavPeer::CATCHALL;
		}

		return $this;
	} // setCatchall()

	/**
	 * Set the value of [tree_left] column.
	 * 
	 * @param      int $v new value
	 * @return     sfBreadNav The current object (for fluent API support)
	 */
	public function setTreeLeft($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->tree_left !== $v) {
			$this->tree_left = $v;
			$this->modifiedColumns[] = sfBreadNavPeer::TREE_LEFT;
		}

		return $this;
	} // setTreeLeft()

	/**
	 * Set the value of [tree_right] column.
	 * 
	 * @param      int $v new value
	 * @return     sfBreadNav The current object (for fluent API support)
	 */
	public function setTreeRight($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->tree_right !== $v) {
			$this->tree_right = $v;
			$this->modifiedColumns[] = sfBreadNavPeer::TREE_RIGHT;
		}

		return $this;
	} // setTreeRight()

	/**
	 * Set the value of [tree_parent] column.
	 * 
	 * @param      int $v new value
	 * @return     sfBreadNav The current object (for fluent API support)
	 */
	public function setTreeParent($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->tree_parent !== $v) {
			$this->tree_parent = $v;
			$this->modifiedColumns[] = sfBreadNavPeer::TREE_PARENT;
		}

		return $this;
	} // setTreeParent()

	/**
	 * Set the value of [scope] column.
	 * 
	 * @param      int $v new value
	 * @return     sfBreadNav The current object (for fluent API support)
	 */
	public function setScope($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->scope !== $v) {
			$this->scope = $v;
			$this->modifiedColumns[] = sfBreadNavPeer::SCOPE;
		}

		if ($this->asfBreadNavApplication !== null && $this->asfBreadNavApplication->getId() !== $v) {
			$this->asfBreadNavApplication = null;
		}

		return $this;
	} // setScope()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
			// First, ensure that we don't have any columns that have been modified which aren't default columns.
			if (array_diff($this->modifiedColumns, array())) {
				return false;
			}

		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->page = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->title = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->module = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->action = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->credential = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->catchall = ($row[$startcol + 6] !== null) ? (boolean) $row[$startcol + 6] : null;
			$this->tree_left = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->tree_right = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->tree_parent = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
			$this->scope = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 11; // 11 = sfBreadNavPeer::NUM_COLUMNS - sfBreadNavPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating sfBreadNav object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

		if ($this->asfBreadNavApplication !== null && $this->scope !== $this->asfBreadNavApplication->getId()) {
			$this->asfBreadNavApplication = null;
		}
	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(sfBreadNavPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = sfBreadNavPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->asfBreadNavApplication = null;
		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{

    foreach (sfMixer::getCallables('BasesfBreadNav:delete:pre') as $callable)
    {
      $ret = call_user_func($callable, $this, $con);
      if ($ret)
      {
        return;
      }
    }


		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(sfBreadNavPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			sfBreadNavPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	

    foreach (sfMixer::getCallables('BasesfBreadNav:delete:post') as $callable)
    {
      call_user_func($callable, $this, $con);
    }

  }
	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{

    foreach (sfMixer::getCallables('BasesfBreadNav:save:pre') as $callable)
    {
      $affectedRows = call_user_func($callable, $this, $con);
      if (is_int($affectedRows))
      {
        return $affectedRows;
      }
    }


		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(sfBreadNavPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$affectedRows = $this->doSave($con);
			$con->commit();
    foreach (sfMixer::getCallables('BasesfBreadNav:save:post') as $callable)
    {
      call_user_func($callable, $this, $con, $affectedRows);
    }

			sfBreadNavPeer::addInstanceToPool($this);
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			// We call the save method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->asfBreadNavApplication !== null) {
				if ($this->asfBreadNavApplication->isModified() || $this->asfBreadNavApplication->isNew()) {
					$affectedRows += $this->asfBreadNavApplication->save($con);
				}
				$this->setsfBreadNavApplication($this->asfBreadNavApplication);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = sfBreadNavPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = sfBreadNavPeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setId($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += sfBreadNavPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->asfBreadNavApplication !== null) {
				if (!$this->asfBreadNavApplication->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->asfBreadNavApplication->getValidationFailures());
				}
			}


			if (($retval = sfBreadNavPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = sfBreadNavPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getPage();
				break;
			case 2:
				return $this->getTitle();
				break;
			case 3:
				return $this->getModule();
				break;
			case 4:
				return $this->getAction();
				break;
			case 5:
				return $this->getCredential();
				break;
			case 6:
				return $this->getCatchall();
				break;
			case 7:
				return $this->getTreeLeft();
				break;
			case 8:
				return $this->getTreeRight();
				break;
			case 9:
				return $this->getTreeParent();
				break;
			case 10:
				return $this->getScope();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param      string $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                        BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. Defaults to BasePeer::TYPE_PHPNAME.
	 * @param      boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns.  Defaults to TRUE.
	 * @return     an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true)
	{
		$keys = sfBreadNavPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getPage(),
			$keys[2] => $this->getTitle(),
			$keys[3] => $this->getModule(),
			$keys[4] => $this->getAction(),
			$keys[5] => $this->getCredential(),
			$keys[6] => $this->getCatchall(),
			$keys[7] => $this->getTreeLeft(),
			$keys[8] => $this->getTreeRight(),
			$keys[9] => $this->getTreeParent(),
			$keys[10] => $this->getScope(),
		);
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = sfBreadNavPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setPage($value);
				break;
			case 2:
				$this->setTitle($value);
				break;
			case 3:
				$this->setModule($value);
				break;
			case 4:
				$this->setAction($value);
				break;
			case 5:
				$this->setCredential($value);
				break;
			case 6:
				$this->setCatchall($value);
				break;
			case 7:
				$this->setTreeLeft($value);
				break;
			case 8:
				$this->setTreeRight($value);
				break;
			case 9:
				$this->setTreeParent($value);
				break;
			case 10:
				$this->setScope($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = sfBreadNavPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setPage($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setTitle($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setModule($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setAction($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCredential($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCatchall($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setTreeLeft($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setTreeRight($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setTreeParent($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setScope($arr[$keys[10]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(sfBreadNavPeer::DATABASE_NAME);

		if ($this->isColumnModified(sfBreadNavPeer::ID)) $criteria->add(sfBreadNavPeer::ID, $this->id);
		if ($this->isColumnModified(sfBreadNavPeer::PAGE)) $criteria->add(sfBreadNavPeer::PAGE, $this->page);
		if ($this->isColumnModified(sfBreadNavPeer::TITLE)) $criteria->add(sfBreadNavPeer::TITLE, $this->title);
		if ($this->isColumnModified(sfBreadNavPeer::MODULE)) $criteria->add(sfBreadNavPeer::MODULE, $this->module);
		if ($this->isColumnModified(sfBreadNavPeer::ACTION)) $criteria->add(sfBreadNavPeer::ACTION, $this->action);
		if ($this->isColumnModified(sfBreadNavPeer::CREDENTIAL)) $criteria->add(sfBreadNavPeer::CREDENTIAL, $this->credential);
		if ($this->isColumnModified(sfBreadNavPeer::CATCHALL)) $criteria->add(sfBreadNavPeer::CATCHALL, $this->catchall);
		if ($this->isColumnModified(sfBreadNavPeer::TREE_LEFT)) $criteria->add(sfBreadNavPeer::TREE_LEFT, $this->tree_left);
		if ($this->isColumnModified(sfBreadNavPeer::TREE_RIGHT)) $criteria->add(sfBreadNavPeer::TREE_RIGHT, $this->tree_right);
		if ($this->isColumnModified(sfBreadNavPeer::TREE_PARENT)) $criteria->add(sfBreadNavPeer::TREE_PARENT, $this->tree_parent);
		if ($this->isColumnModified(sfBreadNavPeer::SCOPE)) $criteria->add(sfBreadNavPeer::SCOPE, $this->scope);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(sfBreadNavPeer::DATABASE_NAME);

		$criteria->add(sfBreadNavPeer::ID, $this->id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	/**
	 * Generic method to set the primary key (id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of sfBreadNav (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setPage($this->page);

		$copyObj->setTitle($this->title);

		$copyObj->setModule($this->module);

		$copyObj->setAction($this->action);

		$copyObj->setCredential($this->credential);

		$copyObj->setCatchall($this->catchall);

		$copyObj->setTreeLeft($this->tree_left);

		$copyObj->setTreeRight($this->tree_right);

		$copyObj->setTreeParent($this->tree_parent);

		$copyObj->setScope($this->scope);


		$copyObj->setNew(true);

		$copyObj->setId(NULL); // this is a auto-increment column, so set to default value

	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     sfBreadNav Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     sfBreadNavPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new sfBreadNavPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a sfBreadNavApplication object.
	 *
	 * @param      sfBreadNavApplication $v
	 * @return     sfBreadNav The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setsfBreadNavApplication(sfBreadNavApplication $v = null)
	{
		if ($v === null) {
			$this->setScope(NULL);
		} else {
			$this->setScope($v->getId());
		}

		$this->asfBreadNavApplication = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the sfBreadNavApplication object, it will not be re-added.
		if ($v !== null) {
			$v->addsfBreadNav($this);
		}

		return $this;
	}


	/**
	 * Get the associated sfBreadNavApplication object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     sfBreadNavApplication The associated sfBreadNavApplication object.
	 * @throws     PropelException
	 */
	public function getsfBreadNavApplication(PropelPDO $con = null)
	{
		if ($this->asfBreadNavApplication === null && ($this->scope !== null)) {
			$c = new Criteria(sfBreadNavApplicationPeer::DATABASE_NAME);
			$c->add(sfBreadNavApplicationPeer::ID, $this->scope);
			$this->asfBreadNavApplication = sfBreadNavApplicationPeer::doSelectOne($c, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->asfBreadNavApplication->addsfBreadNavs($this);
			 */
		}
		return $this->asfBreadNavApplication;
	}

	/**
	 * Resets all collections of referencing foreign keys.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect objects
	 * with circular references.  This is currently necessary when using Propel in certain
	 * daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all associated objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
		} // if ($deep)

			$this->asfBreadNavApplication = null;
	}


  public function __call($method, $arguments)
  {
    if (!$callable = sfMixer::getCallable('BasesfBreadNav:'.$method))
    {
      throw new sfException(sprintf('Call to undefined method BasesfBreadNav::%s', $method));
    }

    array_unshift($arguments, $this);

    return call_user_func_array($callable, $arguments);
  }


} // BasesfBreadNav
