---
sidebar_position: 2   
title: dimension
slug: /ace/dimension
tags: [Expressions]
---

Convert an measure to the dimension.

### Syntax

 ```yaml
dimension(<expr>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| expr | any | An expression that classified as measure. |

### Return values
Depends on input arguments.


## Usage

Converts the sum measure to a dimension.


```yaml
dimension(sum(orders.total_price))
```


### Related functions      
* [sum](/ace/sum)
* [count_x](/ace/count_x)
* [average_x](/ace/average_x)
* [as](/ace/as)
