/* Source code to find factorial of a number. */

#include<iostream>
using namespace std;
int factorial(int n);
int main()
{
    int n;
    cin >> n;
    cout << factorial(n);
    return 0;
}
int factorial(int n)
{
    if(n!=1)
     return n*factorial(n-1);
}