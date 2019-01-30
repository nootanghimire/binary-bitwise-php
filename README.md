# Binary Bitwise PHP | Lightning Talks

## Numbers are just 1s and 0s in computers

```
 0 = 0
 1 = 1
 2 = 10
 3 = 11
 4 = 100
 5 = 101
 6 = 110
 7 = 111
 8 = 1000
 9 = 1001
10 = 1010
11 = 1011
12 = 1100
.... and so on
``` 

[[NOT-COVERED]But then how are negative numbers stored?](/#nope)


## Binary numbers have boolean operations as well (Well they created it)

## The NEGATOR (~)
It converts 0 to 1 and 1 to 0

## Umm, Can I use that on integers?
This is hard. How do you want to do it? `~0` gives `1` and `~1` gives `0` but what would happen if you did: `~9`?

Well, you said that all the integers were represented as binary? How about we do this to the individual bits of the binary representation of that number?

So, `~9 = ~1001 = ~1 ~0 ~0 ~1 = 0 1 1 0 = 0110 = 6`

[[NOT-COVERED]This will produce something different when you try on php, but that's got to do with how are positive and negative numbers represented in the computer](/#nope)



## The AND
It works with two binary numbers and states this: 
"For me to return 1, I need both of them to be 1"

So `8 & 1 = 1000 & 0001 = (1&0) (0&0) (0&0) (0&1) = 0 0 0 0 = 0000 = 0`


Note: See how I added a bunch of zeros so that both of them has same number of digits? Computers avoid that by making sure that you use all the digits (32 or 64) when storing the number.

## The OR
It works with two binary numbers and states this:
"For me to return 1, I need either of you to be 1. If none of you are 1, I'll return a 0"

So `8 | 1 = 1000 | 0001 = (1|0) (0|0) (0|0) (0|1) = 1 0 0 1 = 1001 = 9`

## OK, this is all fancy and stuff, why would i use this
Yeah, you won't probably use this a lot of time. It's more extensively used in the other fancy stuff like cryptography, embedded systems, so on ... 

BUT, there are some nice use cases for normal programming as well. For one, you can use it to optimize checking of odd and even number

`$ ./run.sh odd-even`

` input & 1 ` gives you  either `1` or `0` : if it gives you 0, input is an even number, else its not an even number


## A Pizza with Different Toppings : Using bitwise operations in a fun way.

`$ ./run.sh Pizza` 

[Use the source code to explain things](/tree/master/Pizza.php)
