`Factory Method pattern`
=====================

Brief explanation
-------

``
In class-based programming, the factory method pattern is a creational pattern that uses factory methods to deal with the problem of creating objects without having to specify the exact class of the object that will be created. This is done by creating objects by calling a factory method—either specified in an interface and implemented by child classes, or implemented in a base class and optionally overridden by derived classes—rather than by calling a constructor.
``

- The Factory Method design pattern solves problems like:

  + How can an object be created so that subclasses can redefine which class to instantiate?
How can a class defer instantiation to subclasses?
Creating an object directly within the class that requires (uses) the object is inflexible because it commits the class to a particular object and makes it impossible to change the instantiation independently from (without having to change) the class.

- The Factory Method design pattern describes how to solve such problems:

  + Define a separate operation (factory method) for creating an object.
  + Create an object by calling a factory method.
  + This enables writing of subclasses to change the way an object is created (to redefine which class to instantiate). 
  
- Wikipedia (https://en.wikipedia.org/wiki/Factory_method_pattern)

For testing install PHPUnit in project directory for running unit tests.