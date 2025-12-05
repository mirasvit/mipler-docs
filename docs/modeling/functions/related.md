---
sidebar_position: 2   
title: related
slug: /ace/related
tags: [Filter]
---

Retrieves related data from a related table.

### Syntax

 ```yaml
related(<column>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| column | any | The column to operate on. |

### Return values
Depends on input arguments.


## Usage

Retrieves customer name for each order based on the customer relationship.


```yaml
related(customers.name, orders.customer_id = customers.id)
```


### Related functions      
* [related_x](/ace/related_x)
* [create_relationship](/ace/create_relationship)
* [cross_filter](/ace/cross_filter)
