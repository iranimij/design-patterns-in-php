# Strategy pattern definition
```

The Strategy Pattern defines a family of algorithms, Encapsulates each one and makes them interchangeable.
Strategy lets the algorithm vary independently from clients that use it.

```
This pattern is kind of about the below rules:

* Favor composition over inheritance.
* Identify the aspects of your application that vary and separate them from what stays the same.
* Program to an interface not implementations.


We change some functions that vary (Fly and Quack), encapsulate them and use them with composition.

#### The big picture on encapsulated behaviors and the Strategy design pattern:

![](D:/recycle/october/Screenshot_2.png)