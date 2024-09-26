# Calculate Discount Function Refactor

This repository contains a refactored version of a legacy PHP function that calculates discounts based on user membership and the total amount. 

## Approach

1. Early Return for Non-Members
The first step in the function is to check if the user is a member. If not, the function returns 0 right away. This approach avoids unnecessary nested logic and keeps the function clean and easy to follow.

2. Using a Switch Statement
We replaced multiple if statements with a switch statement to handle different membership levels. This makes it easier to read and extend if additional membership levels are introduced in the future.

3. Ternary Operator for Discounts
For gold members, a ternary operator is used to decide whether the discount is 20% or 10%, based on whether the total amount exceeds $100. This helps streamline the logic into a single line, improving readability.

4. Comments for Clarity
The code contains comments throughout to make the function easier to understand. This ensures that anyone reviewing the code (including yourself in the future) can quickly comprehend its functionality.
