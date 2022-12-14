<?php

namespace Filament\Resources\RelationManagers\Concerns;

use Filament\Tables;
use Illuminate\Database\Eloquent\Model;

trait CanDeleteRecords
{
    /**
     * @deprecated Use `->action()` on the action instead.
     */
    public function delete(): void
    {
        $this->callHook('beforeDelete');

        $this->getMountedTableActionRecord()->delete();

        $this->callHook('afterDelete');

        if (filled($this->getDeletedNotificationMessage())) {
            $this->notify('success', $this->getDeletedNotificationMessage());
        }
    }

    /**
     * @deprecated Use `->successNotificationMessage()` on the action instead.
     */
    protected function getDeletedNotificationMessage(): ?string
    {
        return __('filament-support::actions/delete.single.messages.deleted');
    }

    /**
     * @deprecated Use `->action()` on the action instead.
     */
    public function bulkDelete(): void
    {
        $this->callHook('beforeBulkDelete');

        $this->getSelectedTableRecords()->each(fn (Model $record) => $record->delete());

        $this->callHook('afterBulkDelete');

        if (filled($this->getBulkDeletedNotificationMessage())) {
            $this->notify('success', $this->getBulkDeletedNotificationMessage());
        }
    }

    /**
     * @deprecated Use `->successNotificationMessage()` on the action instead.
     */
    protected function getBulkDeletedNotificationMessage(): ?string
    {
        return __('filament-support::actions/delete.multiple.messages.deleted');
    }

    /**
     * @deprecated Actions are no longer pre-defined.
     */
    protected function getDeleteAction(): Tables\Actions\Action
    {
        return Tables\Actions\DeleteAction::make()
            ->action(fn () => $this->delete());
    }

    /**
     * @deprecated Actions are no longer pre-defined.
     */
    protected function getDeleteBulkAction(): Tables\Actions\BulkAction
    {
        return Tables\Actions\DeleteBulkAction::make()
            ->action(fn () => $this->bulkDelete());
    }
}
