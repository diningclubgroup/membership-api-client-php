# README

## Running tests

    make build
    make test

## Usage

```
$c = Client::init(
    "https://membership.dcg.local",
    "file://jwtRS256.key",
    42 // Consumer ID
);

// list cancellation reasons
$res = $c->cancellationReasons()->fetch();

// list card usages for a membership
$res = $c->membership($membershipId)->cardUsage()->fetch();

// fetch a specific card usage
$res = $c->membership($membershipId)->cardUsage($cardUsageId)->fetch();

// create card usage
$res = $c->membership($membershipId)->cardUsage()->create($usage);

// delete card usage
$c->membership($membershipId)->cardUsage($cardUsageId)->delete();

// list customers
$res = $c->customer()->fetch();

// fetch customer by id
$res = $c->customer($customerId)->fetch();

// delete a customer
$res = $c->customer($customerId)->delete();
```

### Not yet implemented

```
// update card usage
$res = $c->membership($membershipId)->cardUsage($cardUsageId)->update();

// create a customer
$res = $c->customer()->create();

// update a customer
$res = $c->customer($id)->update();
```
