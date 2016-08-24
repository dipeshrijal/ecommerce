@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="row">
            <div class="col s12">
                <div class="card z-depth-2">
                    <div class="card-content">
                        <span class="card-title">
                            Display Record
                        </span>
                        <table class="bordered highlight responsive-table">
                            <thead>
                                <tr>
                                    <th data-field="id">
                                        Name
                                    </th>
                                    <th data-field="name">
                                        Item Name
                                    </th>
                                    <th data-field="price">
                                        Item Price
                                    </th>
                                    <th data-field="edit">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        Alvin
                                    </td>
                                    <td>
                                        Eclair
                                    </td>
                                    <td>
                                        $0.87
                                    </td>
                                    <td>
                                        <a href="#">
                                            <i class="material-icons">
                                                node_edit
                                            </i>
                                        </a>
                                        <a href="#">
                                            <i class="material-icons">
                                                delete
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Alan
                                    </td>
                                    <td>
                                        Jellybean
                                    </td>
                                    <td>
                                        $3.76
                                    </td>
                                    <td>
                                        <a href="#">
                                            <i class="material-icons">
                                                node_edit
                                            </i>
                                        </a>
                                        <a href="#">
                                            <i class="material-icons">
                                                delete
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Jonathan
                                    </td>
                                    <td>
                                        Lollipop
                                    </td>
                                    <td>
                                        $7.00
                                    </td>
                                    <td>
                                        <a href="#">
                                            <i class="material-icons">
                                                node_edit
                                            </i>
                                        </a>
                                        <a href="#">
                                            <i class="material-icons">
                                                delete
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal  --}}
    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
        <button class="btn-floating btn-large red modal-trigger" data-target="modal1">
            <i class="large material-icons">
                add
            </i>
        </button>
    </div>
    <!-- Modal Structure -->
    <div class="modal modal-fixed-footer" id="modal1">
        <div class="modal-content">
            <h4>
                Create Form
            </h4>
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">
                            account_circle
                        </i>
                        <input class="validate" id="first_name" type="text"/>
                        <label for="first_name">
                            First Name
                        </label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">
                            account_circle
                        </i>
                        <input class="validate" id="last_name" type="text"/>
                        <label for="last_name">
                            Last Name
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">
                            contact_phone
                        </i>
                        <input class="validate" id="phone" type="text"/>
                        <label for="phone">
                            Phone
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">
                            perm_identity
                        </i>
                        <input class="validate" id="password" type="password"/>
                        <label for="password">
                            Password
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">
                            email
                        </i>
                        <input class="validate" id="email" type="email"/>
                        <label for="email">
                            Email
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">
                            comment
                        </i>
                        <textarea class="materialize-textarea" id="textarea1">
                        </textarea>
                        <label for="textarea1">
                            Textarea
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">
                            play_arrow
                        </i>
                        <select>
                            <option disabled="disabled" selected="selected" value="">
                                Choose your option
                            </option>
                            <option value="1">
                                Option 1
                            </option>
                            <option value="2">
                                Option 2
                            </option>
                            <option value="3">
                                Option 3
                            </option>
                        </select>
                        <label>
                            Materialize Select
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">
                            play_arrow
                        </i>
                        <select multiple="multiple">
                            <option disabled="disabled" selected="selected" value="">
                                Choose your option
                            </option>
                            <option value="1">
                                Option 1
                            </option>
                            <option value="2">
                                Option 2
                            </option>
                            <option value="3">
                                Option 3
                            </option>
                        </select>
                        <label>
                            Materialize Select
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <i class="material-icons prefix">
                            done
                        </i>
                        <input id="test1" name="group1" type="radio"/>
                        <label for="test1">
                            Red
                        </label>
                        <input id="test2" name="group1" type="radio"/>
                        <label for="test2">
                            Yellow
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <i class="material-icons prefix">
                            done
                        </i>
                        <input id="test5" type="checkbox"/>
                        <label for="test5">
                            Red
                        </label>
                        <input checked="checked" id="test6" type="checkbox"/>
                        <label for="test6">
                            Yellow
                        </label>
                        <input checked="checked" class="filled-in" id="filled-in-box" type="checkbox"/>
                        <label for="filled-in-box">
                            Filled in
                        </label>
                        <input id="indeterminate-checkbox" type="checkbox"/>
                        <label for="indeterminate-checkbox">
                            Indeterminate Style
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <div class="switch">
                            <i class="material-icons prefix">
                                play_arrow
                            </i>
                            <label>
                                Off
                                <input type="checkbox"/>
                                <span class="lever">
                                </span>
                                On
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 file-field input-field">
                        <div class="btn">
                            <span>
                                File
                            </span>
                            <input type="file"/>
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">
                            perm_contact_calendar
                        </i>
                        <input class="datepicker" id="date" type="date"/>
                        <label for="date">
                            Date
                        </label>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button class="waves-effect waves-light btn-flat" type="submit">
                <i class="material-icons right">
                    send
                </i>
                Save
            </button>
            <button class="modal-action modal-close waves-effect waves-light btn-flat">
                Cancel
            </button>
        </div>
    </div>
@stop
