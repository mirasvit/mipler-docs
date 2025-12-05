---
sidebar_position: 2   
title: keep_filters
slug: /ace/keep_filters
tags: [Filter]
---

Evaluates an expression in a context modified by filters.

### Syntax

 ```yaml
keep_filters(<expr>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| expr | any | The expression to be evaluated. |

### Return values
Depends on input arguments.


## Usage

Calculates the sum of total prices while keeping the current filter context.


```yaml
keep_filters(sum(orders.total_price))
```


### Related functions      
* [filter](/ace/filter)
* [all](/ace/all)
* [calculate](/ace/calculate)
