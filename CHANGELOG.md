# CHANGELOG

## v1.2.0
 - Removed symfony ^5.4 support
 - Introduced `FlashBagExecption` to handle flash messages in a more flexible way
 - Introduced `BadgeFormatter` to display badges in a standardized way
 - Improved `datetime_controller.js` to handle more date formats
 - Introduced `input-mask_controller.js` to handle input masks like Money or Security-Numbers

## v1.0.6
 - More documentation and better styling of the documentation
 - Deprecated methods `getContainer` and `get` of `BaseCommand`
 - BC: Refactored Stimulus Controller `select_controller.js` to `combobox_controller.js`
     - Use all options available in Tom Select
 - Fixed a bug where the escape key would open an empty modal
 - Introduced a Twig Extension: `araise_core_to_string`
 - `\BackedEnum` are now supported in the araise `StringConverter`

## v1.0.5
 - Removed dependency to `coduo/php-to-string`
 - Added own `StringConverter`
 - Updated `doctrine/collections` version from `~1.0` to `~1.0|~2.0`
 - Added new bundle configuration `enable_turbo` (default `false`)
     - Other `araise` bundles will use this configuration to enable turbo as well
 - More documentation and better styling of the documentation
 - Improved styling generally

## v1.0.1
 - English translation
 - Use `StringConverter` to get rid of the `__toString` method requirement
 - Optimized Calendar styling
