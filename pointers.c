// project description
/* All computers have memory, also known as RAM. 
It holds the programs that your computer is currently running along with the data they are currently manipulating.
Memory addresses act just like the indexes of a normal array. The computer can access any address in memory at any time.
This project required me to create a simple C program that asks a user for a float value and 
display the pointer and user input memory location*/

#include <stdio.h>

//create function to show bits
void showbits( unsigned int x )
{
    int i=0;
    for (i = (sizeof(int) * 8) - 1; i >= 0; i--)
    {
       putchar(x & (1u << i) ? '1' : '0');
    }
    printf("\n");
}
int main()
{
	// get the user input
    float f; //initialise float value
    printf("Enter a floating Point: \n");
    scanf("%f\n", &f); //get user input
    
    //trick the compiler into treating the float as an integer
	//NB: Bitwise operation work on integers but not floating-point numbers
	
    union fp_bit_twiddler { // initialise an onion
    float f;
    unsigned int i; // introduce unsinged int
	} q;
	int a;
	q.f = a; //match user input to onion
	q.i &= (1 << 3);
	a = q.f;
    printf("Float is = %f\n",a); // print user input
    
    int *p;   /* a pointer to an integer */
    // printf("%d Location pointer %d\n", p, &a);
    p = &a;
    printf("Memory Location Pointer %d\n", p, &a);
	printf("\nAddress of variable var is: %p", &a);
	printf("\nAddress of variable var is: %p", p);
	printf("\nAddress of pointer p is: %p", &p);
    
    //show binary value using bitwise
      printf("\n%d in binary \t\t ", a);
    /* assume we have a function that prints a binary string when given 
       a decimal integer 
    */
    showbits(a);

    /* the loop for right shift operation */
    for (int m = 0; m <= 5; m++)
    {
        int n = a >> m;
        printf("%d right shift %d gives ", a, m);
        showbits(n); //print bitwise and shift rights
    }
    return 0;
}