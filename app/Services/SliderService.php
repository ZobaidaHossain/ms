<?php

namespace App\Services;

use App\Models\Slider;

class SliderService
{
    protected $model;

    public function __construct(Slider $model)
    {
        $this->model = $model;
    }

    public function list()
    {
        return $this->model->whereNull('deleted_at');
    }

    public function all()
    {
        return $this->model->whereNull('deleted_at')->get();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update($id,array $data)
    {
        $dataInfo = $this->model->find($id);
        if($dataInfo){
            return $dataInfo->update($data);
        }
      return false;
    }

    public function delete($id)
    {
        $dataInfo = $this->model->find($id);

      if($dataInfo){
        return $dataInfo->delete();
      }
      return false;
    }

    public function changeStatus($request)
    {
        $dataInfo = $this->model->findOrFail($request->id);

        $dataInfo->update(['status' => $request->status]);

        return $dataInfo;
    }

    public function activeList()
    {
        return $this->model->whereNull('deleted_at')->where('status', 'Active')->get();
    }
    public function getChartOfAccounts()
    {
        $accounts = $this->model
            ->with(['children' => function ($q) {
                $q->whereNull('deleted_at')
                    ->where('status', 'Active');
            }])
            ->whereNull('deleted_at')
            ->where('status', 'Active')
            ->get();

        $chartOfAccounts = [];

        foreach ($accounts as $accountInfo) {
            $chartOfAccounts[] = $this->buildAccountTree($accountInfo);
        }

        return $chartOfAccounts;
    }

    protected function buildAccountTree($accountInfo)
    {
        $accountData = $accountInfo->toArray();

        if ($accountInfo->children->count() > 0) {
            $childrenAccounts = [];

            foreach ($accountInfo->children as $childAccountInfo) {
                $childrenAccounts[] = $this->buildAccountTree($childAccountInfo);
            }

            $accountData['children'] = $childrenAccounts;
        }

        return $accountData;
    }

    public function activeJournalAccountList()
    {
        return $this->model->whereNull('deleted_at')
            ->where('status', 'Active')->get();
    }
}
