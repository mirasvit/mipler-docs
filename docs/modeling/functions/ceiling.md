---
sidebar_position: 2   
title: ceiling
slug: /ace/ceiling
tags: [Math]
---

Rounds a number up to the nearest integer.

### Syntax

 ```yaml
ceiling(<expr>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| expr | Number | The expression to evaluate. |

### Return values
Integer


## Usage

Rounds the discount amount up to the nearest integer.


```yaml
ceiling(orders.discount_amount)
```


### Related functions      
* [abs](/ace/abs)
* [int](/ace/int)
* [convert](/ace/convert)
