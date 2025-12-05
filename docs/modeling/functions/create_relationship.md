---
sidebar_position: 2   
title: create_relationship
slug: /ace/create_relationship
tags: [Filter]
---

Creates a relationship between two tables.

### Syntax

 ```yaml
create_relationship(<leftColumn>, <rightColumn>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| leftColumn | any | The Leftcolumn value. |
| rightColumn | any | The Rightcolumn value. |

### Return values
Null


## Usage

Creates a relationship between orders and customers tables based on customer_id.


```yaml
create_relationship(orders, customers, orders.customer_id = customers.id)
```


### Related functions      
* [explore](/ace/explore)
* [cross_filter](/ace/cross_filter)
* [related](/ace/related)
* [related_x](/ace/related_x)
* [left_join](/ace/left_join)
