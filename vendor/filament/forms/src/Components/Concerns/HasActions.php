<?php

namespace Filament\Forms\Components\Concerns;

use Filament\Forms\Components\Actions\Action;
use Illuminate\Database\Eloquent\Model;

trait HasActions
{
    protected array $actions = [];

    protected Model | string | null $actionFormModel = null;

    public function registerActions(array $actions): static
    {
        $this->actions = array_merge(
            $this->actions,
            array_map(fn (Action $action): Action => $action->component($this), $actions),
        );

        return $this;
    }

    public function getAction(string $name): ?Action
    {
        return $this->getActions()[$name] ?? null;
    }

    public function getActions(): array
    {
        return $this->actions;
    }

    public function actionFormModel(Model | string | null $model): static
    {
        $this->actionFormModel = $model;

        return $this;
    }

    public function getActionFormModel(): Model | string | null
    {
        return $this->actionFormModel ?? $this->getRecord() ?? $this->getModel();
    }

    public function hasAction(string $name): bool
    {
        return array_key_exists($name, $this->getActions());
    }
}
