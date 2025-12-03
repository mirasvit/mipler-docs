---
sidebar_position: 2   
title: case
slug: /ace/case
tags: [Logical]
---

Evaluates multiple conditions and returns the value corresponding to the first condition that is true.

### Syntax

 ```yaml
case(<if1>, <then1>, <if2>, <then2>, <if3>, <then3>, ...)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| if1 | Boolean | The first condition to evaluate. |
| then1 | any | The value to return if first condition is true. |
| if2 | Boolean | The second condition to evaluate. |
| then2 | any | The value to return if second condition is true. |
| if3 | Boolean |  |
| then3 | any |  |

### Return values
Depends on input arguments.


## Usage

Categorizes orders as 'High', 'Medium', or 'Low' based on total price.


```yaml
case(orders.total_price > 100, 'High', orders.total_price > 50, 'Medium', 'Low')
```


### Related functions      
* [if](/ace/if)
* [and](/ace/and)
* [or](/ace/or)
* [not](/ace/not)
