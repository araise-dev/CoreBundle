# Bundle Configuration
For the standalone usage of the CoreBundle, you can configure this bundle via a configuration file under `config/packages/araise_core.yaml`.

```yaml
# config/packages/araise_core.yaml
araise_core:
```

ℹ️ Note: If you are using another bundle of ours that requires the CoreBundle (for example [CrudBundle](https://crud.docs.araise.dev/#/bundle-configuration) or [TableBundle](https://table.docs.araise.dev/#/bundle-configuration)), you may either not need to configure these options or you can override them in the config files of those bundles. 
For more infos, consult their documentation.


## Configuration Options
Under the `araise_core` key you can use any of the following options:

### `enable_turbo`

| Type    | Default  | Description                                    |
|---------|----------|------------------------------------------------|
| boolean | `false`  | Is used to decide whether turbo is used or not |

Be sure to pay attention on how you have your CoreBundle configured.
If you set `enable_turbo` to `true` for example, you want to use `document.addEventListener('turbo:load')` to check when a container has been reloaded.
If you have `enable_turbo` disabled, you can use for example `document.addEventListener('DOMContentLoaded')` - just as you would in a plain HTML/CSS/JS website.
