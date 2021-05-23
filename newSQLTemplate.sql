if exists(select 1 from sys.sysforeignkey where role='FK_ING_COMP_ING_PROVE_ING_PROV') then
    alter table ING_COMPRAS
       delete foreign key FK_ING_COMP_ING_PROVE_ING_PROV
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_ING_COMP_RELATIONS_PROC_BOD') then
    alter table ING_COMPRAS
       delete foreign key FK_ING_COMP_RELATIONS_PROC_BOD
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_ING_COMP_RELATIONS_ING_INGR') then
    alter table ING_COMPRAS
       delete foreign key FK_ING_COMP_RELATIONS_ING_INGR
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_ING_INGR_RELATIONS_ING_COMP') then
    alter table ING_INGRESO
       delete foreign key FK_ING_INGR_RELATIONS_ING_COMP
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_ING_INGR_ING_PROD_ING_COMP') then
    alter table ING_INGRESO_DET
       delete foreign key FK_ING_INGR_ING_PROD_ING_COMP
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_ING_NOTA_RELATIONS_ING_COMP') then
    alter table ING_NOTA_CREDITO
       delete foreign key FK_ING_NOTA_RELATIONS_ING_COMP
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_RELATION_RELATIONS_ING_COMP') then
    alter table RELATIONSHIP_18
       delete foreign key FK_RELATION_RELATIONS_ING_COMP
end if;

drop index if exists ING_COMPRAS.RELATIONSHIP_49_FK;

drop index if exists ING_COMPRAS.RELATIONSHIP_48_FK;

drop index if exists ING_COMPRAS.ING_PROVEEDOR_FK;

drop index if exists ING_COMPRAS.ING_COMPRAS_PK;

drop table if exists ING_COMPRAS;

/*==============================================================*/
/* Table: ING_COMPRAS                                           */
/*==============================================================*/
create table ING_COMPRAS 
(
   PROV_ID              integer                        not null,
   ING_NUMERODOC2       integer                        not null,
   ING_TIPODOC2         integer                        not null,
   BOD_CODIGO           integer                        not null,
   ING_FECHADOC         date                           null,
   ING_MONEDA           integer                        null,
   ING_TIPODECAMBIO     decimal(18,2)                  null,
   ING_IVA              decimal(18,2)                  null,
   ING_TIPOPAGO         smallint                       null,
   ING_ESTADO_PAGO      smallint                       null,
   ING_ESTADO_DOC       smallint                       null,
   ING_NETO             numeric(8,2)                   null,
   ING_TOTAL            numeric(8,2)                   null,
   ING_BODEGA_REC       numeric(3)                     null,
   ING_GENINGRESO       smallint                       null,
   constraint PK_ING_COMPRAS primary key (PROV_ID, ING_NUMERODOC2, ING_TIPODOC2)
);

/*==============================================================*/
/* Index: ING_COMPRAS_PK                                        */
/*==============================================================*/
create unique index ING_COMPRAS_PK on ING_COMPRAS (
PROV_ID ASC,
ING_NUMERODOC2 ASC,
ING_TIPODOC2 ASC
);

/*==============================================================*/
/* Index: ING_PROVEEDOR_FK                                      */
/*==============================================================*/
create index ING_PROVEEDOR_FK on ING_COMPRAS (
PROV_ID ASC
);

/*==============================================================*/
/* Index: RELATIONSHIP_48_FK                                    */
/*==============================================================*/
create index RELATIONSHIP_48_FK on ING_COMPRAS (
BOD_CODIGO ASC
);

/*==============================================================*/
/* Index: RELATIONSHIP_49_FK                                    */
/*==============================================================*/
create index RELATIONSHIP_49_FK on ING_COMPRAS (

);

alter table ING_COMPRAS
   add constraint FK_ING_COMP_ING_PROVE_ING_PROV foreign key (PROV_ID)
      references ING_PROVEEDOR (PROV_ID)
      on update restrict
      on delete restrict;

alter table ING_COMPRAS
   add constraint FK_ING_COMP_RELATIONS_PROC_BOD foreign key (BOD_CODIGO)
      references PROC_BODEGA (BOD_CODIGO)
      on update restrict
      on delete restrict;

alter table ING_COMPRAS
   add constraint FK_ING_COMP_RELATIONS_ING_INGR foreign key ()
      references ING_INGRESO
      on update restrict
      on delete restrict;