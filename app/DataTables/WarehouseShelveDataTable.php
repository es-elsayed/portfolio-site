<?php

namespace App\DataTables;

use App\Enums\WarehouseShelve as EnumsWarehouseShelve;
use App\Models\Warehouse\WarehouseShelve;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class WarehouseShelveDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable->editColumn('zone_id', function ($row) {
            return $row->zone->code;
        })
            ->editColumn('status', function ($row) {
                $label = '';
                if ($row->status == EnumsWarehouseShelve::Empty) {
                    $label = '<span class="label label-info label-inline mr-2">Empty</span>';
                } else {
                    $label = '<span class="label label-info label-inline mr-2">Full</span>';
                }
                return $label;
            })
            ->editColumn('created_at', function ($row) {
                return longDateFormat($row->created_at);
            })
            ->rawColumns(['status', 'action'])->addColumn('action', 'warehouse.warehouse_shelves.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\WarehouseShelve $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(WarehouseShelve $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->orderBy(1)
            ->addAction(['width' => '120px', 'printable' => false, 'title' => __('crud.action')])
            ->parameters(
                array_merge(
                    config('datatables-buttons.parameters'),
                    [
                        'columnDefs' => [
                            [
                                'targets' => 0,
                                'checkboxes' => [
                                    'selectRow' => true,
                                    'stateSave' => false,
                                ]
                            ]
                        ],
                        'select' => [
                            'style' => 'multi',
                        ],
                    ]
                )
            );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'checkbox' => new Column(['data' => 'id', 'orderable' => false, 'searchable' => false, 'exportable' => false]),
            'zone_id' => new Column(['title' => __('models/warehouseShelves.fields.zone_id'), 'data' => 'zone_id']),
            'code' => new Column(['title' => __('models/warehouseShelves.fields.code'), 'data' => 'code']),
            'lenght' => new Column(['title' => __('models/warehouseShelves.fields.lenght'), 'data' => 'lenght']),
            'width' => new Column(['title' => __('models/warehouseShelves.fields.width'), 'data' => 'width']),
            'height' => new Column(['title' => __('models/warehouseShelves.fields.height'), 'data' => 'height']),
            'status' => new Column(['title' => __('models/warehouseShelves.fields.status'), 'data' => 'status']),
            'created_at' => new Column(['title' => __('models/warehouseShelves.fields.created_at'), 'data' => 'created_at'])
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'warehouse_shelves_datatable_' . time();
    }
}
