<?php

function getVariantParams($variantId){
               return   \dibi::query('SELECT [pn].[implementation_name] AS [implementation_name],
                                             [pv].[surcharge_rate] AS [surcharge_rate], 
                                             [po].[name] AS [name],
                                             [po].[id] AS [oid],
                                             [pv].[id] AS [id] 
                                      FROM [c_param_value] AS [pv]
                                      LEFT JOIN [c_conf] AS [cc] ON [cc].[id_param_value] = [pv].[id]
                                      LEFT JOIN [c_param_options] AS [po] ON [po].[id] = [pv].[value_f]
                                      LEFT JOIN [c_param_names] AS [pn] ON [pn].[id] = [pv].[id_param]
                                      WHERE [cc].[id_variant] = %i AND [po].[id_param] = [pv].[id_param]', $variantId)->fetchAssoc('implementation_name');
}
