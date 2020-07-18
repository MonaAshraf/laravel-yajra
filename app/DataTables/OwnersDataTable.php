<?php

namespace App\DataTables;

use App\Owner;
use App\DataTables\OwnersDataTable;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

use Yajra\DataTables\Html\Builder;









class OwnersDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', 'owners.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\OwnersDataTable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Owner $model)
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


                    ->setTableId('ownersdatatable-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)


                    ->buttons(
                        Button::make('export')->className('msuccess'),
                        Button::make('create')->action("window.location = '".route('owner.mydashboard')."';")->className("btn-primary"),

                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')->className('btn-success')
                    );


    }

    /**
     * Get columns.
     *.
     * @return array
     */
    protected function getColumns()
    {
        return [


            Column::make('id'),
            Column::make('name'),
            Column::make('email'),
            Column::make('created_at'),
            Column::make('updated_at'),
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center'),
        ];
    }


    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Owners_' . date('YmdHis');
    }
}
