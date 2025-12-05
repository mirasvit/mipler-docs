---
sidebar_position: 2   
title: calculate
slug: /ace/calculate
tags: [Filter]
---

Evaluates an expression in a context modified by filters.

### Syntax

 ```yaml
calculate(<expr>, <filter>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| expr | any | The expression to be evaluated. |
| filter | Boolean | A boolean (True/False) expression. |

### Return values
Depends on input arguments.


## Usage

Calculates total amount for orders created in 2022.


```yaml
calculate(orders.total_amount, year(orders.created_at) == 2022)
```


Calculates total amount for order items with products from 'Various' vendor and 'Returning' customers.


```yaml
calculate(order_items.total_amount, and(products.vendor == "Various", customers.type == "Returning"))
```


Calculates total amount for all orders, ignoring any applied filters.


```yaml
calculate(orders.total_amount, all(orders))
```


Calculates total amount for orders with discount greater than 0.


```yaml
calculate(orders.total_amount, filter(orders, orders.discount > 0))
```


### Related functions      
* [filter](/ace/filter)
* [all](/ace/all)
* [keep_filters](/ace/keep_filters)
* [cross_filter](/ace/cross_filter)
