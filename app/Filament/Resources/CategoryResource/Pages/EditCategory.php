<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use App\Filament\Resources\CategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCategory extends EditRecord
{
    protected static string $resource = CategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function canEdit(): bool
    {
        $product = $this->record;

        if ($product && $product->isReferencedElsewhere()) {
            // Product is referenced elsewhere, disallow editing
            return false;
        }

        // Call parent method to maintain other checks
        return parent::canEdit();
    }

    public function mount($record): void
    {
        parent::mount($record);

        if (!$this->canEdit()) {
            $this->notify('danger', 'This product cannot be edited because it is referenced in other records.');
        }
    }
}
