Instructions
In this exercise you're going to write some code to help you cook a brilliant lasagna from your favorite cooking book.

You have five tasks, all related to the time spent cooking the lasagna.

1. Define the expected oven time in minutes
Implement the expectedCookTime function in class Lasagna that does not take any arguments and returns how many minutes the lasagna should be in the oven. According to the cooking book, the expected oven time in minutes is 40:

<?php
$timer = new Lasagna();
$timer->expectedCookTime()
// => 40
2. Calculate the remaining oven time in minutes
Implement the remainingCookTime function in class Lasagna that takes the actual minutes the lasagna has been in the oven as an argument and returns how many minutes the lasagna still has to remain in the oven, based on the expected oven time in minutes from the previous task.

<?php
$timer = new Lasagna();
$timer->remainingCookTime(30)
// => 10
3. Calculate the preparation time in minutes
Implement the totalPreparationTime function in class Lasagna that takes the number of layers you added to the lasagna as an argument and returns how many minutes you spent preparing the lasagna, assuming each layer takes you 2 minutes to prepare.

<?php
$timer = new Lasagna();
$timer->totalPreparationTime(3)
// => 6
4. Calculate the total working time in minutes
Implement the totalElapsedTime function in class Lasagna that takes two arguments: the first argument is the number of layers you added to the lasagna, and the second argument is the number of minutes the lasagna has been in the oven. The function should return how many minutes in total you've worked on cooking the lasagna, which is the sum of the preparation time in minutes, and the time in minutes the lasagna has spent in the oven at the moment.

<?php
$timer = new Lasagna();
$timer->totalElapsedTime(3, 20)
// => 26
5. Create a notification that the lasagna is ready
Implement the alarm function in class Lasagna that does not take any arguments and returns a message indicating that the lasagna is ready to eat.

<?php
$timer = new Lasagna();
$timer->alarm()
// => "Ding!"