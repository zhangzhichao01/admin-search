<?php

namespace App\Admin\Controllers;

use App\Model\Member;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class MemberController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Model\Member';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Member);

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('mobile', __('Mobile'));
        $grid->column('wechat', __('Wechat'));
        $grid->column('integral', __('Integral'));
        $grid->column('gender', __('Gender'))->using(Member::$gender);
        $grid->column('car_no', __('Car no'));
        $grid->column('describe', __('Describe'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        $grid->filter(function ($filter){
            $filter->disableIdFilter();
            $filter->like('name',__('Name'));
        });

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Member::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('mobile', __('Mobile'));
        $show->field('wechat', __('Wechat'));
        $show->field('integral', __('Integral'));
        $show->field('gender', __('Gender'));
        $show->field('car_no', __('Car no'));
        $show->field('describe', __('Describe'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Member);

        $form->text('name', __('Name'));
        $form->mobile('mobile', __('Mobile'));
        $form->text('wechat', __('Wechat'));
        $form->number('integral', __('Integral'));
        $form->switch('gender', __('Gender'));
        $form->text('car_no', __('Car no'));
        $form->text('describe', __('Describe'));

        return $form;
    }
}
