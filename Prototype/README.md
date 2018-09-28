`Prototype pattern`
=====================

Brief explanation
-------

``
The prototype pattern is a creational design pattern in software development. It is used when the type of objects to create is determined by a prototypical instance, which is cloned to produce new objects.
``
  
+ This pattern is used to:
  
  + avoid subclasses of an object creator in the client application, like the factory method pattern does.
  + avoid the inherent cost of creating a new object in the standard way (e.g., using the 'new' keyword) when it is prohibitively expensive for a given application.
  + To implement the pattern, declare an abstract base class that specifies a pure virtual clone() method. Any class that needs a "polymorphic constructor" capability derives itself from the abstract base class, and implements the clone() operation.
  
- Wikipedia (https://en.wikipedia.org/wiki/Prototype_pattern)

For testing install PHPUnit in project directory for running unit tests.