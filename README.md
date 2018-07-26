# Magic Methods ¶
##### The function names:
1. `__construct()` 
2. `__destruct()`
3. `__call()`
4. `__callStatic()`
5. `__get()`
6. `__set()`
7. `__isset()`
8. `__unset()`
9. `__sleep()`
    - The intended use of __sleep() is to commit pending data or perform similar cleanup tasks. Also, the function is useful if you have very large objects which do not need to be saved completely.
    - Conversely, unserialize() checks for the presence of a function with the magic name __wakeup(). If present, this function can reconstruct any resources that the object may have.
    
10. `__wakeup()`
    - The intended use of __wakeup() is to reestablish any database connections that may have been lost during serialization and perform other reinitialization tasks.
11. `__toString()`
12. `__invoke()`
13. `__set_state(` 
14. `__clone()`
15. `__debugInfo()` 
#### are magical in PHP classes. You cannot have functions with these names in any of your classes unless you want the magic functionality associated with them.


# Protect Encapsulation
Protect Encapsulation of class object using magic function `__set()`