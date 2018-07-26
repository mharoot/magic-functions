# Magic Methods ¶
##### The function names:
1. [__construct()](https://github.com/mharoot/magic-functions/blob/master/connection.php)
2. `__destruct()`
3. [__call()](https://github.com/mharoot/magic-functions/blob/master/call.php)
    - __call() is triggered when invoking inaccessible methods in an object context.
    - __callStatic() is triggered when invoking inaccessible methods in a static context.
4. `__callStatic()`
5. [__get()](https://github.com/mharoot/magic-functions/blob/master/propertyTest.php)
6. [__set()](https://github.com/mharoot/magic-functions/blob/master/set.php)
7. [__isset()](https://github.com/mharoot/magic-functions/blob/master/propertyTest.php)
8. [__unset()](https://github.com/mharoot/magic-functions/blob/master/propertyTest.php)
9. [__sleep()](https://github.com/mharoot/magic-functions/blob/master/connection.php)
    - The intended use of __sleep() is to commit pending data or perform similar cleanup tasks. Also, the function is useful if you have very large objects which do not need to be saved completely.
    - Conversely, unserialize() checks for the presence of a function with the magic name __wakeup(). If present, this function can reconstruct any resources that the object may have.
    
10. [__wakeup()](https://github.com/mharoot/magic-functions/blob/master/connection.php)
    - The intended use of __wakeup() is to reestablish any database connections that may have been lost during serialization and perform other reinitialization tasks.
11. [__toString()](https://github.com/mharoot/magic-functions/blob/master/toString.php)
12. `__invoke()`
13. `__set_state(` 
14. [__clone()](https://github.com/mharoot/magic-functions/blob/master/clone.php)
15. [__debugInfo()](https://github.com/mharoot/magic-functions/blob/master/debug.php)
#### are magical in PHP classes. You cannot have functions with these names in any of your classes unless you want the magic functionality associated with them.


# Protect Encapsulation
Protect Encapsulation of class object using magic function `__set()`